<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Joke;

#[Signature('joke:fetch')]
#[Description('Fetch a random joke from official-joke-api and save to database')]
class FetchJokeCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');

        if ($response->successful()) {
            $data = $response->json();

            // Проверяем, нет ли уже такой шутки по api_id
            Joke::firstOrCreate(
                ['api_id' => $data['id']],
                [
                    'type' => $data['type'] ?? null,
                    'setup' => $data['setup'],
                    'punchline' => $data['punchline'],
                ]
            );

            $this->info('Joke fetched and saved successfully.');
        } else {
            $this->error('Failed to fetch joke.');
        }
    }
}
