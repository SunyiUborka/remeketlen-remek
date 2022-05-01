<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_connecting()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register(){
        $response = $this->post('/register',[
            'username' => 'alma',
            'email' => 'alma@email.com',
            'password' => 'almaalma',
            'password_confirmation' => 'almaalma'
        ]);
        $response->assertRedirect('/');
    }

    public function test_login(){
        $response = $this->post('/login',[
            'username' => 'alma',
            'password'=> 'almaalma'
        ]);

        $response->assertRedirect('/');
    }
    public function test_profile_image_update(){

        Storage::fake('public');

        $this->json('put', '/profile/image', [
            'user_image' => $file = UploadedFile::fake()->image('random.jpg')
        ]);

        $this->assertEquals('user_image/' . $file->hashName(), UploadedFile::latest()->first()->file);

        Storage::disk('public')->assertExists('user_image/' . $file->hashName());

    }

    public function test_password_change(){

        $url = route('user.update-password');
        $values = [
            'old_password'=>'adminadmin',
            'password'=>'adminadmin',
            'password_confirmation' => 'adminadmin',
        ];
       $response = $this->post($url,$values);
        $this->assertDatabaseHas(User::class, $values);
        $response->assertRedirect('profile');
    }

    public function test_program_upload(){
        Storage::fake('public');

        $response = $this->put( '/dosarc', [
            'name'=> 'game',
            'program_image' => $file_image = UploadedFile::fake()->image('random.jpg'),
            'developer' => "",
            'type_name' => 'Szoftver',
            'category_name' => '',
            'program_file' => $program_file = UploadedFile::fake()->create('file.zip'),
            'release_date' => '',
            'description' => ''

        ]);

        $this->assertEquals('user_image/' . $file_image->hashName(), UploadedFile::latest()->first()->file_image);
        $this->assertEquals('program_file/' . $program_file->hashName(), UploadedFile::latest()->first()->program_file);

        Storage::disk('public')->assertExists('user_image/' . $file_image->hashName());

        $response->assertRedirect('/dosarc');
    }

    public function test_forum_create(){
         $response = $this->get("/forum", [
            'title' => 'game',
             'title' => 'game for lövölde',
             'thread' => 'lövölde jatek',
             'description' => 'lövöldözös jatékocska',
             'comment_text' => ' 10kill'
         ]);
         $response->assertRedirect('/forum');
    }
}
