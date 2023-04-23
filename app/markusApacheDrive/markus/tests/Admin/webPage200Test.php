<?php
namespace App\Tests\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class webPage200Test extends WebTestCase
{
    public $client;
    public function setUp(): void
    {
        $this->client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('admin@example.com');
        $this->client->loginUser($testUser);
    }
    public function testAdminHomePage(){
        $this->client->request('GET', '/admin/');
        $this->assertResponseIsSuccessful();
    }
    public function testAdminAbsencePages(){
        $this->client->request('GET', '/admin/absence');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/absence/view/class/1');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/absence/edit/1/1');
        $this->assertResponseIsSuccessful();
    }
    public function testAdminMarkPages(){
        $this->client->request('GET', '/admin/marks');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/marks/1');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/marks/edit/1');
        $this->assertResponseIsSuccessful();
    }
    public function testAdminStudentPages(){
        $this->client->request('GET', '/admin/student');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/student/1');
        $this->assertResponseIsSuccessful();
    }
    public function testAdminTeacherPages(){
        $this->client->request('GET', '/admin/teacher');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/admin/teacher/1');
        $this->assertResponseIsSuccessful();
    }
}


?>