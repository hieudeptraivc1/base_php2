<?php

namespace Acer\BasePhp2\Controllers\Admin;

use Acer\BasePhp2\Commons\Controller;
use Acer\BasePhp2\Commons\Helper;
use Acer\BasePhp2\Models\Category;
use Rakit\Validation\Validator;

class CategoryController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->all();

        $this->renderViewAdmin('categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('categories.create', [
            'categoryPluck' => $categoryPluck
        ]);
    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'                  => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/category/create'));
            exit;
        } else {
            $data = [
                'name'          => $_POST['name'],
            ];

            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/categories'));
            exit;
        }
    }

    public function show($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('categories.show', [
            'categories' => $category
        ]);
    }

    public function edit($id)
    {
        $category = $this->category->findByID($id);
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('categories.edit', [
            'categories' => $category,
            'categoryPluck' => $categoryPluck,
        ]);
    }

    public function update($id)
    {
        $category = $this->category->findByID($id);

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'                  => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/categories/$id/edit"));
            exit;
        } else {
            $data = [
                'name'          => $_POST['name'],
            ];

            $this->category->update($id, $data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/categories/$id/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $category = $this->category->findByID($id);

            $this->category->delete($id);

            // if ($category['img_thumbnail'] && file_exists( PATH_ROOT . $category['img_thumbnail'] ) ) {
            //     unlink(PATH_ROOT . $category['img_thumbnail']);
            // }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/categories'));
        exit();
    }
}