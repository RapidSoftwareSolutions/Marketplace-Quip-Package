<?php
$routes = [
    'metadata',
    'getSingleThread',
    'getThreads',
    'getRecentThread',
    'createDocument',
    'createSpreadsheet',
    'updateDocument',
    'addMembersToThread',
    'removeMembersFromThread',
    'getThreadBlob',
    'addBlobToThread',
    'getRecentMessages',
    'addMessage',
    'getSingleFolder',
    'getFolders',
    'createFolder',
    'updateFolder',
    'addPeopleToFolder',
    'removePeopleFromFolder',
    'getSingleUser',
    'getUsers',
    'getAuthenticatedUser',
    'getContacts'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

