<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::oldest()->get();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:25',
            'jenis_kelamin' => 'required|string|max:15',
            'tgl_lahir' => 'required|date',
            'email' => 'required|string|max:30',
            'username' => 'required|string|max:30'

        ]);
        $customer = Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'username' => $request->username
        ]);
        if ($customer) {
            return redirect()
                ->route('customer.index')
                ->with(['success' => 'Data customer telah berhasil ditambahkan']);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi kesalahan, silakan coba kembali'
                ]);
        }
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:25',
            'jenis_kelamin' => 'required|string|max:15',
            'tgl_lahir' => 'required|date',
            'email' => 'required|string|max:30',
            'username' => 'required|string|max:30'

        ]);
        $customer = Customer::findOrFail($id);
        $customer->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'username' => $request->username
        ]);
        if ($customer) {
            return redirect()
                ->route('customer.index')
                ->with(['success' => 'Data customer telah berhasil diperbarui']);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'error! Silahkan coba kembali'
                ]);
        }
    }
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        if ($customer) {
            return redirect()
                ->route('customer.index')
                ->with(['success' => 'Data customer telah berhasil dihapus']);
        } else {
            return redirect()
                ->route('customer.index')
                ->with(['error' => 'Error! Silakan coba kembali']);
        }
    }
}
