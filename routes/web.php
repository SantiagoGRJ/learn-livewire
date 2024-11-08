<?php

use App\Livewire\Alumns\CreateAlumn;
use App\Livewire\Alumns\IndexAlumns;
use App\Livewire\Alumns\ShowAlumn;
use App\Livewire\Alumns\UpdateAlumn;
use App\Livewire\Animals\CreateAnimals;
use App\Livewire\Animals\IndexAnimals;
use App\Livewire\Animals\ShowAnimals;
use App\Livewire\Animals\UpdateAnimals;
use App\Livewire\Counter\Counter;
use App\Livewire\Photos\CreatePhoto;
use App\Livewire\Photos\IndexPhotos;
use App\Livewire\Photos\ShowPhoto;
use App\Livewire\Photos\UpdatePhoto;
use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\IndexPosts;
use App\Livewire\Posts\ShowPost;
use App\Livewire\Posts\UpdatePost;
use App\Livewire\Todo\TodoList;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/counter',Counter::class);

Route::get('/todo',TodoList::class)->name('todo');

Route::get('/posts',IndexPosts::class)->name('post.index');

Route::get('/posts/create',CreatePost::class)->name('post.create');

Route::get('/posts/{post}/show',ShowPost::class)->name('post.show');

Route::get('/posts/{post}/update',UpdatePost::class)->name('post.update');

Route::get('/alumns',IndexAlumns::class)->name('alumn.index');
Route::get('/alumns/create',CreateAlumn::class)->name('alumn.create');
Route::get('alumns/{alumn}/show',ShowAlumn::class)->name('alumn.show');
Route::get('alumns/{alumn}/update',UpdateAlumn::class)->name('alumn.update');

Route::get('/animals',IndexAnimals::class)->name('animal.index');
Route::get('/animals/create',CreateAnimals::class)->name('animal.create');
Route::get('/animals/{animal}/show',ShowAnimals::class)->name('animal.show');
Route::get('/animals/{animal}/update',UpdateAnimals::class)->name('animal.update');


Route::get('/photos',IndexPhotos::class)->name('photo.index');
Route::get('/photos/create',CreatePhoto::class)->name('photo.create');
Route::get('photos/{photo}/show',ShowPhoto::class)->name('photo.show');
Route::get('photos/{photo}/update',UpdatePhoto::class)->name('photo.update');



require __DIR__.'/auth.php';
