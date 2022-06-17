<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PekerjaanController extends BaseController
{
    public function index()
    {
        $works = $this->work->orderBy('created_at', 'DESC')->get()->getResult();
        return view('pages/dashboard/work/index', [
            'data' => $works
        ]);
    }

    public function new()
    {
        return view('pages/dashboard/work/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getVar();
        $this->work->save([
            'company_name' => $data['company_name'],
            'position' => $data['position'],
            'year' => $data['year'],
            'user_id' => user_id()
        ]);

        return redirect('works')->with('message', 'Data pekerjaan berhasil ditambahkan!');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->work->findById($id);
        return view('pages/dashboard/work/edit', [
            'data' => $data
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getVar();
        $this->work->save([
            'id' => $id,
            'company_name' => $data['company_name'],
            'position' => $data['position'],
            'year' => $data['year']
        ]);


        return redirect('works')->with('message', 'Data pekerjaan berhasil diupdate!');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->work->delete($id);
        return redirect('works')->with('message', 'Data pekerjaan berhasil dihapus!');
    }
}
