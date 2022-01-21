<?php

use App\item;
use Illuminate\Database\Seeder;

class DataItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $arrData = [
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 1',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => '1.jpg'
        ],
        [
            'jenis_item' => 'Alat Musik',
            'nama_item' => 'Terompet',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 15000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'trompet1.jpg'
        ],
        [
            'jenis_item' => 'Alat Studio',
            'nama_item' => 'Microphone',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 90000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'mikrofon1.jpg'
        ],
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 2',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 3',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 4',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 5',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Ruang Studio',
            'nama_item' => 'Studio 6',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 5000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Alat Musik',
            'nama_item' => 'Gitar',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 18000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'gitar1.jpg'
        ],
        [
            'jenis_item' => 'Alat Musik',
            'nama_item' => 'Bass',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 15000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'bass1.jpg'
        ],
        [
            'jenis_item' => 'Alat Musik',
            'nama_item' => 'Drum',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 35000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'drum1.jpg'
        ],
        [
            'jenis_item' => 'Alat Musik',
            'nama_item' => 'Piano',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 25000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'piano1.jpg'
        ],
        [
            'jenis_item' => 'Alat Studio',
            'nama_item' => 'Headphone',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 90000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => ''
        ],
        [
            'jenis_item' => 'Alat Studio',
            'nama_item' => 'Mixer',
            'status_item' => 0, // 0 = ada, 1 = dipinjam
            'harga_item' => 190000,
            'deskripsi_item' => 'Lorem ipsum dolor sit amet',
            'gambar_item' => 'mixer1.jpg'
        ]
        ];
    
    public function run()
    {
        //

        foreach($this->arrData as $val) {
            item::create($val);
        }
    }
}
