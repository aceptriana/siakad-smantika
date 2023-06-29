<?php

namespace App\Controllers;

use App\Models\StafTataUsahaModel;

class StafTataUsaha extends BaseController
{
    public function index()
    {
        $model = new StafTataUsahaModel();
        $data['staftatausaha'] = $model->findAll();

        return view('staftatausaha/index', $data);
    }

    public function create()
    {
        return view('staftatausaha/create');
    }

    public function store()
    {
        $model = new StafTataUsahaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->insert($data);

        return redirect()->to('/staftatausaha');
    }

    public function edit($id)
    {
        $model = new StafTataUsahaModel();
        $data['staftatausaha'] = $model->find($id);

        return view('staftatausaha/edit', $data);
    }

    public function update($id)
    {
        $model = new StafTataUsahaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->update($id, $data);

        return redirect()->to('/staftatausaha');
    }

    public function delete($id)
    {
        $model = new StafTataUsahaModel();
        $model->delete($id);

        return redirect()->to('/staftatausaha');
    }
}
