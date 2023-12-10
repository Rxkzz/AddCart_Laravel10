<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'Temulawak',
                'author' => '',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-1VwWe6j2RjU%2FXnh2179j4PI%2FAAAAAAAAH64%2FdaG0vMEQAMIbrbdAWWTHXJc7j_rCT2pKQCLcBGAsYHQ%2Fs1600%2Fjamu2.jpg&f=1&nofb=1&ipt=22566ec11d553b623214ffdde2a5f77c4f4f4c3459a070e09f540755e859de2e&ipo=images',
                'price' => 14
            ],
            [
                'name' => 'The Simple Wild',
                'author' => 'KA Tucker',
                'image' => 'https://bookcart.azurewebsites.net/Upload/b868eb26-f12c-4dcf-ba19-03e0d6cafb8d36373564.jpg',
                'price' => 1153
            ],
            [
                'name' => 'The Hate You Give',
                'author' => 'Angie Thomas',
                'image' => 'https://bookcart.azurewebsites.net/Upload/3d894fa1-8746-4443-b244-99624cc39f1fq1we.jpg',
                'price' => 227
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'image' => 'https://bookcart.azurewebsites.net/Upload/5b7162d6-2780-461b-be6f-e4debac083ad18007564.jpg',
                'price' => 348
            ],
            [
                'name' => 'The Beholder',
                'author' => 'Anna Bright',
                'image' => 'https://bookcart.azurewebsites.net/Upload/5ba1968d-a7f5-4a04-99c2-281088b8532fqq.jpg',
                'price' => 998
            ]
        ];
        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}