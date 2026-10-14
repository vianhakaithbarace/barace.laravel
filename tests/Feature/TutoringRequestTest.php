<?php

namespace Tests\Feature;

use App\Models\Tutoring;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TutoringRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_tutoring_request_can_be_deleted(): void
    {
        $tutoringRequest = Tutoring::factory()->create();

        $response = $this->deleteJson('/api/tutoring-requests/' . $tutoringRequest->id);

        $response->assertNoContent();
        $this->assertDatabaseMissing('tutorings', ['id' => $tutoringRequest->id]);
    }
}
