<?php
namespace App\Tests\Student;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class webPage200Test extends WebTestCase
{
    public $client;
    public function setUp(): void
    {
        $this->client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('student@example.com');
        $this->client->loginUser($testUser);
    }
    public function testStudentHomePage(){
        $this->client->request('GET', '/student/');
        $this->assertResponseIsSuccessful();
    }
    public function testStudentPages(){
        $this->client->request('GET', '/student/marks/');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/student/marks/1');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/student/absence/');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/student/timetable');
        $this->assertResponseIsSuccessful();
    }
}


?>