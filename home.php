<?php
require_once('git/client/GitHubClient.php');


$owner = 'jmrvm801';
$repo = 'hello-world';
$title = 'Something is broken.';
$body = 'Please fix it.';

$client = new GitHubClient();
$client->setCredentials('ferns----il.com', '---');
$client->issues->createAnIssue($owner, $repo, $title, $body);



/*$client = new GitHubClient("cdf696013ef4e6ef---e9f272ab3b");
$client->setCredentials('ferns----ail.com', 'B---');



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