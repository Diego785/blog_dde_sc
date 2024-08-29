<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class ShowUsuario extends Component
{
    use WithPagination;

    public $show_modal_add_user = false;
    public $show_modal_edit_user = false;
    public $search = '';

    public $usuarios;
    public $user;
    public $nombre, $correo, $contra, $rol = '', $unidad = '';


    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    //REGLAS
    protected $rules = [
        'nombre' => 'required|string|min:3|max:50',
        'correo' => 'required|email|min:6|max:50|unique:users,email',
        'contra' => 'required|string|min:8|max:255', // Password should have a minimum length, typically 8 characters
        'rol' => 'required', // Assuming 'rol' is a role with predefined options
        'unidad' => 'required', // Assuming 'rol' is a role with predefined options
    ];

    protected $rules_update = [
        'nombre' => 'required|string|min:3|max:50',
        'correo' => 'required|email|min:6|max:50',
        'rol' => 'required', // Assuming 'rol' is a role with predefined options
        'unidad' => 'required', // Assuming 'rol' is a role with predefined options
    ];

    protected $messages = [
        'nombre.required' => 'El nombre del usuario es requerido.',
        'nombre.string' => 'El nombre del usuario debe contener caracteres válidos.',
        'nombre.min' => 'El nombre del denunciante debe tener mínimo 3 caracteres.',
        'nombre.max' => 'El nombre del denunciante debe tener máximo 50 caracteres.',

        'correo.required' => 'El correo del usuario es requerido.',
        'correo.email' => 'El correo del usuario debe tener la estructura de un correo válido.',
        'correo.unique' => 'El correo del usuario ya ha sido utilizado.',
        'correo.min' => 'El correo del usuario debe tener mínimo 6 caracteres.',
        'correo.max' => 'El correo del usuario debe tener máximo 50 caracteres.',

        'contra.required' => 'La contraseña del usuario es requerida.',
        'contra.string' => 'La contraseña debe contener caracteres válidos.',
        'contra.min' => 'La contraseña del usuario debe tener mínimo 8 caracteres.',
        'contra.max' => 'La contraseña del usuario debe tener máximo 255 caracteres.',

        'rol.required' => 'El rol del usuario es requerido.',
    ];


    public function mount()
    {
        $this->search = '';
    }

    public function openModalAddUser()
    {
        $this->reset(['nombre', 'correo', 'contra', 'rol', 'show_modal_add_user']);
        $this->resetValidation();
        $this->show_modal_add_user = true;
    }

    public function openModalEditUser($id)
    {
        $this->reset(['nombre', 'correo', 'contra', 'rol', 'show_modal_edit_user']);
        $this->resetValidation();
        $this->user = User::find($id);

        $this->nombre = $this->user->name;
        $this->correo = $this->user->email;
        $this->unidad = $this->user->unidad_id;

        $this->rol = $this->user->getRoleNames()->first();
        $this->show_modal_edit_user = true;
    }

    public function saveUser()
    {
        $this->validate();

        $this->user = User::create([
            'name' => $this->nombre,
            'email' => $this->correo,
            'password' => bcrypt($this->contra),
            'unidad_id' => $this->unidad,
        ]);
        $this->user->assignRole($this->rol);

        $this->reset(['show_modal_add_user', 'nombre', 'correo', 'contra', 'rol']);
        $this->dispatch('swal', [
            'icon' => 'success',
            'title' => '¡Bien Hecho!',
            'text' => 'Usuario agregado correctamente.',
        ]);
    }

    public function updateUser()
    {
        $this->validate($this->rules_update);
        $this->user->name = $this->nombre;
        $this->user->email = $this->correo;
        $this->user->unidad_id = $this->unidad;
        //here how to assign one rol to update my user?
        $this->user->syncRoles($this->rol);
        $this->user->update();
        $this->reset(['show_modal_edit_user', 'nombre', 'correo', 'contra', 'rol']);
        $this->dispatch('swal', [
            'icon' => 'success',
            'title' => '¡Bien Hecho!',
            'text' => 'Usuario actualizado correctamente.',
        ]);
    }

    public function deleteUser($id)
    {
        $this->user = User::find($id);
        $this->user->delete();
        $this->dispatch('swal', [
            'icon' => 'success',
            'title' => '¡Bien Hecho!',
            'text' => 'Usuario eliminado correctamente.',
        ]);
    }


    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin.show-usuario', [
            'users' => $users,
        ]);
    }
}
