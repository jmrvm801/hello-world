<?php
require_once('git/client/GitHubClient.php');


$owner = 'jmrvm801';
$repo = 'hello-world';
$title = 'Something is broken.';
$body = 'Please fix it.';

$client = new GitHubClient();
$client->setCredentials('fernsoft.corporation@gmail.com', 'Be0809nrcb');
$client->issues->createAnIssue($owner, $repo, $title, $body);



/*$client = new GitHubClient("cdf696013ef4e6ef74ff4355f7d022e9f272ab3b");
$client->setCredentials('fernsoft.corporation@gmail.com', 'Be0809nrcb');



$owner = 'jmrvm801';
$repo = 'hello-world';
$title = 'Something is broken.';
$body = 'Please fix it.';

$client->setPage();
$client->setPageSize(2);
$issues = $client->issues->listIssues($owner, $repo);
print_r($issues);*/
//foreach ($issues as $issue)
//{
    /* @var $issue GitHubIssue */
   // echo get_class($issue) . "[" . $issue->getNumber() . "]: " . $issue->getTitle() . "\n";
//}

//$client->issues->createAnIssue($owner, $repo, $title, $body);
?>