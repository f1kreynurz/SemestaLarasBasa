<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
        ]);

        // Tambahkan data lain jika perlu
    }
}
