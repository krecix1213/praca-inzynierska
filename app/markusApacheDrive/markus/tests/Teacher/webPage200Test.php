<?php
namespace App\Tests\Teacher;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class webPage200Test extends WebTestCase
{
    public $client;
    public function setUp(): void
    {
        $this->client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('teacher@example.com');
        $this->client->loginUser($testUser);
    }
    public function testTeacherHomePage(){
        $this->client->request('GET', '/teacher/');
        $this->assertResponseIsSuccessful();
    }
    public function testTeacherMarkPage(){
        $this->client->request('GET', '/teacher/marks');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/teacher/marks/class/1');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/teacher/marks/view/class/1');
        $this->assertResponseIsSuccessful();
    }
    public function testTeacherAbsencePage(){
        $this->client->request('GET', '/teacher/absence');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/teacher/absence/view/class/1');
        $this->assertResponseIsSuccessful();
        $this->client->request('GET', '/teacher/absence/class/1');
        $this->assertResponseIsSuccessful();
    }
}


?>