<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact_type;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact_type = new Contact_type();
        $contact_type-> title = "Телефон";
        $contact_type-> save();
        
        $contact_type = new Contact_type();
        $contact_type-> title = "VK";
        $contact_type-> save();
        
        $contact_type = new Contact_type();
        $contact_type-> title = "Whatsapp";
        $contact_type-> save();
        
        
        $contact_type = new Contact_type();
        $contact_type-> title = "Telegram";
        $contact_type-> save();
        

    }
}
