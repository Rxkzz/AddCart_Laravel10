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
                'author' => 'Meningkatkan daya tahan tubuh
                Membantu mengatasi penyakit infeksi
                Memperlancar pencernaan',
                'image' => 'https://i.pinimg.com/564x/82/98/8f/82988fa4d380e85cf62c8a55da51038e.jpg',
                'price' => 14
            ],
            [
                'name' => 'Jahe',
                'author' => 'Meredakan mual dan muntah.
                Meningkatkan pencernaan. 
                Meningkatkan daya tahan tubuh. ',
                'image' => 'https://i.pinimg.com/564x/02/57/1d/02571d779e453be8ee731fa8d3acbc94.jpg',
                'price' => 11
            ],
            [
                'name' => 'Kulit Manggis',
                'author' => 'Meningkatkan sistem kekebalan tubuh.
                Membantu menurunkan kolesterol.
                Menjaga kesehatan kulit.',
                'image' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/06/27/2774778979.jpg',
                'price' => 10
            ],
            [
                'name' => 'Wedang uwuh',
                'author' => 'Menghangatkan tubuh
                Meningkatkan daya tahan tubuh
                Melawan peradangan',
                'image' => 'https://i.pinimg.com/564x/93/19/c6/9319c6dcbcb5fbbfb5200b39be989cd6.jpg',
                'price' => 8
            ],
            [
                'name' => 'Kunyit',
                'author' => 'Meningkatkan daya tahan tubuh
                Mengobati radang
                Meredakan nyeri',
                'image' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/06/21075213/Tingkatkan-Sistem-Imun-Ini-11-Manfaat-Kunyit-Asam-untuk-Kesehatan.jpg',
                'price' => 12
            ]
        ];
        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}