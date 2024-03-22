<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = new Contact();
        $contact->user_id = 1;
        $contact->contact_type_id = 1; // phone
        $contact->value = "+79217767606";
        $contact->save();
        
        $contact = new Contact();
        $contact->user_id = 1;
        $contact->contact_type_id = 3; // whatsapp
        $contact->value = "+79217767606";
        $contact->save();

        $contact = new Contact();
        $contact->user_id = 1;
        $contact->contact_type_id = 4; // telegram
        $contact->value = "+79217767606";
        $contact->save();

    }
}
