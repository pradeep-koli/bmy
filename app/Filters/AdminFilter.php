<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Builder\Class_;

Class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('isLoggedIn') && session()->get('role') == "admin")
        {
            return redirect()->to(base_url('/admin'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}