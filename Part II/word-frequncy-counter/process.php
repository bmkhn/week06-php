<?php
// filepath: /c:/xampp/htdocs/week06-php/Part II/word-frequncy-counter/process.php

/**
 * Tokenize the input text into words.
 *
 * @param string $text The input text.
 * @return array The array of words.
 */
function tokenizeText(string $text): array {
    $text = strtolower($text);
    $text = preg_replace('/[^\w\s]/', '', $text); // Remove punctuation
    $words = explode(' ', $text);
    return array_filter($words); // Remove empty elements
}

/**
 * Calculate the frequency of each word.
 *
 * @param array $words The array of words.
 * @return array The associative array of word frequencies.
 */
function calculateWordFrequencies(array $words): array {
    $stopWords = ['the', 'and', 'in', 'of', 'to', 'a', 'is', 'that', 'it', 'with', 'as', 'for', 'was', 'on', 'at', 'by', 'an', 'be', 'this', 'which', 'or', 'from', 'but', 'not', 'are'];
    $frequencies = array_count_values($words);
    foreach ($stopWords as $stopWord) {
        unset($frequencies[$stopWord]);
    }
    return $frequencies;
}

/**
 * Sort the word frequencies.
 *
 * @param array $frequencies The associative array of word frequencies.
 * @param string $order The sorting order ('asc' or 'desc').
 * @return array The sorted associative array of word frequencies.
 */
function sortWordFrequencies(array $frequencies, string $order): array {
    if ($order === 'asc') {
        asort($frequencies);
    } else {
        arsort($frequencies);
    }
    return $frequencies;
}

/**
 * Display the word frequencies.
 *
 * @param array $frequencies The associative array of word frequencies.
 * @param int $limit The number of words to display.
 */
function displayWordFrequencies(array $frequencies, int $limit): void {
    echo "<h2>Word Frequencies</h2>";
    echo "<ol>";
    $count = 0;
    foreach ($frequencies as $word => $frequency) {
        if ($count >= $limit) {
            break;
        }
        echo "<li>" . htmlspecialchars($word) . ": " . htmlspecialchars($frequency) . "</li>";
        $count++;
    }
    echo "</ol>";
}

// Main script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? '';
    $sortOrder = $_POST['sort'] ?? 'desc';
    $limit = (int)($_POST['limit'] ?? 10);

    $words = tokenizeText($text);
    $frequencies = calculateWordFrequencies($words);
    $sortedFrequencies = sortWordFrequencies($frequencies, $sortOrder);

    displayWordFrequencies($sortedFrequencies, $limit);
}
?>