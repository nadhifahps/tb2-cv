<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PendidikanController extends BaseController
{
    public function index()
    {
        $educations = $this->education->orderBy('created_at', 'DESC')->get()->getResult();
        return view('pages/dashboard/education/index', [
            'data' => $educations
        ]);
    }

    public function new()
    {
        return view('pages/dashboard/education/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getVar();
        $this->education->save([
            'degree' => $data['degree'],
            'institute' => $data['institute'],
            'year' => $data['year'],
            'user_id' => user_id()
        ]);

        return redirect('educations')->with('message', 'Data Pendidikan berhasil ditambahkan!');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->education->findById($id);
        return view('pages/dashboard/education/edit', [
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
        $this->education->save([
            'id' => $id,
            'degree' => $data['degree'],
            'institute' => $data['institute'],
            'year' => $data['year']
        ]);


        return redirect('educations')->with('message', 'Data Pendidikan berhasil diupdate!');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->education->delete($id);
        return redirect('educations')->with('message', 'Data Pendidikan berhasil dihapus!');
    }
}
