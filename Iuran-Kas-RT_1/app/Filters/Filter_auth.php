<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Filter_auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('log') != true) {
            session()->setFlashdata('pesan', 'Anda Belum Login, Silahkan Login Terlebih Dahulu');
            return redirect()->to(base_url('auth'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('log') == true) {
            return redirect()->to(base_url('home'));
        }
    }
}
