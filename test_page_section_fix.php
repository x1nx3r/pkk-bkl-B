<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Foundation\Application;
use App\Models\PageSection;

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Testing PageSection content_data handling...\n\n";

// Test 1: Get an existing record
$section = PageSection::first();
echo "Test 1 - Existing record:\n";
echo "ID: {$section->id}\n";
echo "content_data type: " . gettype($section->content_data) . "\n";
echo "content_data value: " . var_export($section->content_data, true) . "\n\n";

// Test 2: Create a new record with array data
$testSection = PageSection::create([
    'page_slug' => 'test',
    'section_key' => 'test-key',
    'title' => 'Test Section',
    'content' => 'Test content',
    'content_data' => ['key1' => 'value1', 'key2' => 'value2'],
    'order' => 999,
]);

echo "Test 2 - Created new record with array data:\n";
echo "ID: {$testSection->id}\n";
echo "content_data type: " . gettype($testSection->content_data) . "\n";
echo "content_data value: " . var_export($testSection->content_data, true) . "\n\n";

// Test 3: Update with string data (simulate potential edge case)
$testSection->content_data = '{"key3": "value3"}';
$testSection->save();
$testSection->refresh();

echo "Test 3 - Updated with JSON string:\n";
echo "content_data type: " . gettype($testSection->content_data) . "\n";
echo "content_data value: " . var_export($testSection->content_data, true) . "\n\n";

// Clean up
$testSection->delete();
echo "Test record cleaned up.\n";
echo "All tests completed successfully!\n";