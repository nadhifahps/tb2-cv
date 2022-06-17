<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TentangSayaController extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    // public function index()
    // {
    //     $certificates = $this->certificate->orderBy('created_at', 'DESC')->get()->getResult();
    //     return view('pages/dashboard/certificate/index', [
    //         'data' => $certificates
    //     ]);
    // }

    public function new()
    {
        return view('pages/dashboard/career/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getVar();
        $this->careerObject->save([
            'career_object' => $data['career_object'],
            'user_id' => user_id()
        ]);

        return redirect()->to('dashboard/cv/career-object/' . $this->careerObject->getInsertID() . '/summary')->with('message', 'Data Tentang Saya berhasil ditambahkan!');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = $this->careerObject->findById($id);
        return view('pages/dashboard/career/index', [
            'data' => $data
        ]);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->careerObject->findById($id);
        return view('pages/dashboard/career/edit', [
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
        $this->careerObject->save([
            'id' => $id,
            'career_object' => $data['career_object']
        ]);

        return redirect()->to('dashboard/cv/career-object/' . $id . '/summary')->with('message', 'Data Tentang Saya berhasil diupdate!');
    }
}
