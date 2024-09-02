<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

Route::get('/issues', [IssueController::class, 'index']); // Read
Route::post('/issues', [IssueController::class, 'store']); // Create
Route::put('/issues/{id}', [IssueController::class, 'update']); // Update
Route::delete('/issues/{id}', [IssueController::class, 'destroy']); // Delete
