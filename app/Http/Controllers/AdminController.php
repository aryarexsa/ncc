<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\category;
use App\Models\Product;
use App\Models\Projects;
use App\Models\Order;
use App\Models\User;
use App\Models\Newsletter;
use App\Models\Category_Article;
use App\Models\Article;

use function PHPUnit\Framework\fileExists;

class AdminController extends Controller
{
    public function view_category()
    {
        $data_category = Category::all();
        return view('admin.category.index', compact('data_category'));
    }

    public function add_category(Request $request)
    {
        $data_kategori = new category;
        $data_kategori->nama = $request->nama_kategori;
        $data_kategori->save();

        toastr()->closeButton()->timeOut(10000)->addSuccess("Berhasil menambahkan kategori $data_kategori->nama");

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = category::find($id);
        return view('admin.category.edit', compact('data'));
    }

    public function update_category(request $request, $id)
    {
        $data = category::find($id);
        $data->nama = $request->nama_kategori;
        $data->save();

        toastr()->closeButton()->timeOut(10000)->success("Berhasil mengubah data $data->nama");

        return redirect('admin/category');
    }

    public function delete_category($id_delete)
    {
        $data_deleted = category::find($id_delete);
        DB::table('categories')->where('id', '=', $id_delete)->delete();
        toastr()->success("Berhasil menghapus kategori $data_deleted->nama ");
        return redirect()->back();
    }

    public function add_product()
    {
        $category = category::all();
        return view('admin.add_product', compact('category'));
    }

    public function insert_product(Request $request)
    {
        $product = new product;
        $product->title = $request->nama_product;
        $product->description = $request->deskripsi_product;
        $product->price = $request->harga_product;
        $product->duration = $request->durasi_product;
        $product->quantity = $request->jumlah_product;
        $product->category = $request->kategori_product;

        $gambar = $request->gambar_product;
        if ($gambar) {
            $namagambar = time() . '.' . $gambar->getClientOriginalExtension();

            $request->gambar_product->move('products', $namagambar);

            $product->image = $namagambar;
        }

        $product->save();

        toastr()->success("Berhasil menambahkan produk $product->title ");

        return redirect()->back();
    }

    public function view_products()
    {
        $products = Product::paginate(3);
        return view('admin.view_products', compact('products'));
    }

    public function edit_product($id)
    {
        $data = Product::find($id);
        $category = category::all();
        return view('admin.edit_product', compact('data', 'category'));
    }

    public function delete_products($id)
    {
        $product = product::find($id);
        $image_path = public_path("products/$product->image");
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $product->delete();

        toastr()->success("Berhasil menghapus product $product->title");
        return redirect()->back();
    }

    public function update_product(Request $request, $id)
    {
        $product_sebelumnya = product::find($id);
        $product_sebelumnya->title = $request->nama_product;
        $product_sebelumnya->description = $request->deskripsi_product;
        $product_sebelumnya->price = $request->harga_product;
        $product_sebelumnya->duration = $request->durasi_product;
        $product_sebelumnya->category = $request->kategori_product;
        $product_sebelumnya->quantity = $request->jumlah_product;

        $gambar = $request->gambar_product;
        if ($gambar) {
            $formatgambar = time() . '.' . $gambar->getClientOriginalExtension();

            $product_sebelumnya->image = $formatgambar;
            $gambar->move('products', $formatgambar);
        }

        $product_sebelumnya->save();

        toastr()->timeout(10000)->success("Berhasil update product $product_sebelumnya->title");

        return redirect(route('admin_view_products'));
    }

    public function search_product(Request $request)
    {
        $search = $request->search;

        $products = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('category', 'LIKE', '%' . $search . '%')->orWhere('description', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('admin.view_products', compact('products'));
    }

    public function projects()
    {
        $projects = Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function add_projects(Request $request)
    {
        return view('admin.projects.add');
    }

    public function insert_projects(Request $request)
    {
        $project = new Projects;
        $project->nama_project = $request->nama_project;
        $project->deskripsi_project = $request->deskripsi_project;
        $project->leader_project = $request->leader_project;
        $project->fee_project = $request->fee_project;

        $project->save();
        toastr()->success("Berhasil menambahkan project $project->nama_project");
        return redirect()->back();
    }

    public function edit_projects($id)
    {
        $data = Projects::find($id);
        return view('admin.projects.edit', compact('data'));
    }

    public function update_projects(Request $request, $id)
    {
        $project = Projects::find($id);
        $project->nama_project = $request->nama_project;
        $project->deskripsi_project = $request->deskripsi_project;
        $project->leader_project = $request->leader_project;
        $project->fee_project = $request->fee_project;

        $project->save();
        toastr()->success("Berhasil update project $project->nama_project");
        return redirect()->back();
    }

    public function orders()
    {
        $data = Order::all();
        return view('admin.orders', compact('data'));
    }

    public function change_status($id)
    {
        $order = Order::find($id);
        $order->status = 'Sold';
        $order->save();

        return redirect()->back();
    }

    public function printpdf($id)
    {
        $data = Order::find($id);
        $pdf = Pdf::loadView('admin.invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }

    public function list_users()
    {
        $all_users = User::all();
        return view('admin.users.list', compact('all_users'));
    }

    public function search_users(Request $request)
    {
        $data_search = $request->search;
        $all_users = User::where('name', 'LIKE', '%' . $data_search . '%')->orWhere('email', 'LIKE', '%' . $data_search . '%')->paginate(8);

        return view('admin.users.list', compact('all_users'));
    }

    public function subs_users()
    {
        $users_subs = Newsletter::all();
        return view('admin.users.subs', compact('users_subs'));
    }

    public function article()
    {
        $data = Article::all();
        return view('admin.article.index', compact('data'));
    }

    public function search_article(Request $request)
    {
        $search = $request->search;

        $data = Article::where('judul', 'LIKE', '%' . $search . '%')->orWhere('paragraf1', 'LIKE', '%' . $search . '%')->orWhere('paragraf2', 'LIKE', '%' . $search . '%')->orWhere('paragraf3', 'LIKE', '%' . $search . '%')->orWhere('paragraf4', 'LIKE', '%' . $search . '%')->orWhere('paragraf5', 'LIKE', '%' . $search . '%');

        return view('admin.article.index', compact('data'));
    }

    public function addArticle()
    {
        $category = Category_Article::all();
        return view('admin.article.add', compact('category'));
    }

    public function addCategoryArticle()
    {
        $data_category = Category_Article::all();
        return view('admin.article.add_category', compact('data_category'));
    }

    public function addNewCategoryArticle(Request $request)
    {
        $category = new Category_Article;
        $category->nama = $request->nama;
        $category->save();

        toastr()->success('Berhasil menambahkan category' . $category->nama);
        return redirect()->back();
    }

    public function editCategoryArticle($id)
    {
        $target = Category_Article::find($id);
        return view('admin.article.edit', compact('target'));
    }

    public function updateCategoryArticle(request $request, $id)
    {
        $categoryOld = Category_Article::find($id);
        $categoryOld->nama = $request->nama;
        $categoryOld->save();

        toastr()->success('Berhasil mengubah nama kategori ' . $categoryOld->nama);
        return redirect()->back();
    }
}
