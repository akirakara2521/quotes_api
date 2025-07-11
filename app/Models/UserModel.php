<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
<<<<<<< HEAD
<<<<<<< HEAD
    protected $primaryKey       = 'user_id';
=======
    protected $primaryKey       = 'user_id'; // pastikan di DB juga 'user_id'
>>>>>>> b5d9b63d889fcea0773916f26398181fca7aab2b
=======
    protected $primaryKey       = 'user_id'; // pastikan di DB juga 'user_id'
>>>>>>> a7b94ba (Update controller, model, and routes for quote & author)
    protected $returnType       = 'App\Entities\User';
    protected $useTimestamps    = true;

    protected $allowedFields = [
        'user_name',
        'user_email',
        'user_password',
        'user_photo',   // kalau ada di tabel
        'description',  // kalau ada di tabel
    ];

    protected $validationRules = [
        'user_name'     => 'required|min_length[3]|max_length[100]',
        'user_email'    => 'required|valid_email|is_unique[users.user_email]',
        'user_password' => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'user_email' => [
            'is_unique'   => 'Maaf, email tersebut sudah terdaftar. Silakan gunakan email lain.',
            'valid_email' => 'Format email tidak valid.',
        ],
        'user_password' => [
            'min_length' => 'Password minimal harus terdiri dari 8 karakter.',
        ],
    ];
}
