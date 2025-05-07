<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    private function getDramaList()
    {
        return [
            [
                'id' => 1,
                'title' => 'When Life Gives You Tangerines',
                'year' => 2025,
                'genre' => 'Romance, Slice-of-life, Drama',
                'episodes' => 16,
                'rating' => 5.0,
                'image' => 'https://upload.wikimedia.org/wikipedia/id/thumb/e/e8/When_Life_Gives_You_Tangerines_poster.png/250px-When_Life_Gives_You_Tangerines_poster.png',
                'director' => 'Lim Sang-choon',
                'description' => 'Drama ini menceritakan petualangan Ae-sun, perempuan pemberontak yang luar biasa dan hubungannya dengan Gwan-sik, lelaki setangguh baja dan pantang menyerah. Mereka hidup di pulau Jeju pada era 1950-an. Drama akan menceritakan kehidupan mereka sepanjang empat musim.'
            ],
            [
                'id' => 2,
                'title' => 'Moving',
                'year' => 2023,
                'genre' => 'Action, Fantasy, Thriller, Romance, Family Drama',
                'episodes' => 20,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/id/f/f2/Moving_%28South_Korean_TV_series%29.png',
                'director' => 'Kang Full',
                'description' => 'Didasarkan pada webtun terkenal karya Kang Full, seri ini adalah drama supernatural yang berhubungan dengan tiga siswa sekolah menengah remaja dan orang tua mereka yang menemukan kekuatan super mereka.'
            ],
            [
                'id' => 3,
                'title' => 'Goblin',
                'year' => 2016,
                'genre' => 'Fantasy, Romance, Drama',
                'episodes' => 16,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/68/Goblin_Poster.jpg/250px-Goblin_Poster.jpg',
                'director' => 'Lee Eung-bok',
                'description' => 'Seorang goblin berusia 939 tahun membutuhkan seorang pengantin manusia untuk mengakhiri kehidupan abadinya, tetapi segalanya menjadi rumit ketika ia jatuh cinta padanya.'
            ],
            [
                'id' => 4,
                'title' => 'Lovely Runner',
                'year' => 2024,
                'genre' => 'Time slip, Romantic comedy, Fantasy',
                'episodes' => 16,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/6/67/Lovely_Runner.png',
                'director' => 'Lee Si-Eun',
                'description' => 'Seri televisi ini merupakan kisah romansa fantasi di mana dua orang dengan kehidupan berbeda bertemu di masa muda mereka yang cerah dan jatuh cinta saat mereka bernavigasi antara masa lalu dan masa kini.'
            ],
            [
                'id' => 5,
                'title' => 'Family by Choice',
                'year' => 2024,
                'genre' => 'Romantic comedy, Coming-of-age, Family Drama',
                'episodes' => 16,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/id/a/a6/Family_by_Choice_poster.png',
                'director' => 'Hong Si-Young',
                'description' => 'Menceritakan tentang tiga teman dekat yang sangat mirip seperti saudara, meskipun tidak memiliki hubungan darah. Mereka menghabiskan masa remaja bersama, dan satu-satunya tempat di mana mereka merasa nyaman adalah saat berada di dekat satu sama lain.'
            ],
            [
                'id' => 6,
                'title' => 'Big Mouth',
                'year' => 2022,
                'genre' => 'Hardboiled, Drama, Noir, Legar, Crime',
                'episodes' => 16,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/id/thumb/b/bb/Big_Mouth_%28South_Korean_TV_series%29.jpg/250px-Big_Mouth_%28South_Korean_TV_series%29.jpg',
                'director' => 'Kim Ha-Ram',
                'description' => 'Seri ini menceritakan kisah seorang pengacara berkinerja buruk yang terjebak dalam kasus pembunuhan. Untuk bertahan hidup dan melindungi keluarganya, ia mengali konspirasi besar di antara kelas atas yang memiliki hak istimewa.'
            ],
            [
                'id' => 7,
                'title' => 'Welcome to Samdal-ri',
                'year' => 2023,
                'genre' => 'Comedy drama, Romantic comedy',
                'episodes' => 16,
                'rating' => 5.0,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/5/54/Welcome_to_Samdal-ri.jpg',
                'director' => 'Kwon Hye-Joo',
                'description' => 'Welcome to Samdalri menceritakan tentang pertemuan dua orang, Jo Yong Pil dan Jo Sam Dal yang sebelumnya pernah mengukir memori bersama saat masih muda, nih. Jo Yong Pil dikenal sebagai pelindung dan penolong orang-orang di Pulau Jeju.'
            ],
            [
                'id' => 8,
                'title' => 'Our Blues',
                'year' => 2022,
                'genre' => 'Melodrama',
                'episodes' => 16,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2f/Our_Blues_%28TV_series%29.jpeg',
                'director' => 'Noh Hee-Kyung',
                'description' => 'Our Blues menceritakan para penduduk Pulau Jeju dengan berbagai masalahnya. Mulai dari kisah asmara, persahabatan, hingga keluarga akan menghiasi 20 episode yang direncanakan tayang.'
            ],
            [
                'id' => 9,
                'title' => 'The Penthouse: War in Life',
                'year' => 2020,
                'genre' => 'Suspense, Drama, Crime, Revenge, Thriller, Mystery',
                'episodes' => 48,
                'rating' => 4.9,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/0/09/The_Penthouse_TV_series.jpg',
                'director' => 'Kim Soon-ok',
                'description' => 'Sebuah penthouse mewah berlokasi di Gangnam, memiliki suasana yang tegang di antara penghuninya yang beragam. Kalangan elegan yang lahir dari masyarakat kelas atas hingga pendaki sosial yang ambisius, masing-masing berusaha untuk mencapai puncak, baik dalam kekayaan, status, maupun pendidikan anak-anak mereka.'
            ],
            [
                'id' => 10,
                'title' => 'Youth of May',
                'year' => 2021,
                'genre' => 'Melodrama, Period Drama',
                'episodes' => 12,
                'rating' => 5.0,
                'image' => 'https://upload.wikimedia.org/wikipedia/en/9/95/Youth_of_May_poster.jpg',
                'director' => 'Lee Kang',
                'description' => 'Berlatar belakang tahun 1980 pada Pemberontakan Gwangju, Youth of May mengisahkan kisah cinta seorang murid kedokteran Hwang Hee-tae (Lee Do-hyun) dan seorang perawat Kim Myung-hee (Go Min-si).'
            ]
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    if (empty($username) || empty($password)) {
        return redirect()->route('login')->with('error', 'Please enter both username and password');
    }

    $request->session()->put('username', $username);

    return redirect()->route('dashboard');
}


    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('profile', ['username' => $username]);
    }


    public function pengelolaan()
    {
        $dramas = $this->getDramaList();
        return view('pengelolaan', ['dramas' => $dramas]);
    }
}

