[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Quip/functions?utm_source=RapidAPIGitHub_QuipFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Quip Package
The Quip API provides read/write access to Quip, enabling you to automate processes and integrate Quip with other products you or your company uses.
* Domain: [quip.com](https://quip.com/)
* Credentials: accessToken

## How to get credentials: 
1. To generate a personal access token, visit [this page](https://quip.com/api/personal-token)
2. Whenever you generate a new token, all previous tokens are automatically invalidated.

## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
  
## Quip.getSingleThread
Returns the given thread.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| id         | String     | Thread id.

## Quip.getThreads
Returns the given threads.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| ids        | List       | Thread id list.

## Quip.getRecentThread
Returns the given thread.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token

## Quip.createDocument
Creates a document, returning the new thread in the format

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| content    | String     | The HTML or Markdown content of the new document
| title      | String     | The title of the new document. If not specified, we infer the title from the first content of the document, e.g., the first heading.
| format     | Select     | Either html or markdown.
| memberIds  | List       | List of folder IDs or user IDs. The document will be placed in the specified folders, and any individual users listed will be granted individual access to the document. If this argument is not given, the document is created in the authenticated user's Private folder.

## Quip.createSpreadsheet
Creates a spreadsheet, returning the new thread in the format

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| content    | String     | The HTML or Markdown content of the new document
| title      | String     | The title of the new document. If not specified, we infer the title from the first content of the document, e.g., the first heading.
| format     | Select     | Either html or markdown.
| memberIds  | List       | List of folder IDs or user IDs. The document will be placed in the specified folders, and any individual users listed will be granted individual access to the document. If this argument is not given, the document is created in the authenticated user's Private folder.

## Quip.updateDocument
Incrementally modifies the content of a document.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| content    | String     | The HTML or Markdown content of the new document
| format     | Select     | Either html or markdown.
| sectionId  | String     | The id for the section you want to modify. Needed for some location values.
| location   | Select     | Where we should insert the new content. Must be: 0,1,2,3,4,5

## Quip.addMembersToThread
Shares the given thread with the given user IDs and/or adds the given thread to the given folder IDs. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| memberIds  | List       | List of folder IDs or user IDs.

## Quip.removeMembersFromThread
Removes the given individuals from the given thread and/or removes the thread from the given folders.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| memberIds  | List       | List of folder IDs or user IDs.

## Quip.getThreadBlob
Retrieves the binary representation of the given blob from the given thread if the user has access.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| blobId     | String     | Blob id

## Quip.addBlobToThread
Uploads an image or other blob to the given thread.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| blob       | File       | Image file.
| name       | String     | File name

## Quip.getRecentMessages
Returns a list of the most recent messages for the given thread, ordered reverse-chronologically.

| Field         | Type       | Description
|---------------|------------|----------
| accessToken   | credentials| Your quip OAuth2 access token
| threadId      | String     | The thread whose document you want to modify
| count         | Number     | The number of messages to return.
| maxCreatedUsec| Number     | If given, we return messages updated before the given max_created_usec, which is a UNIX timestamp in microseconds. 

## Quip.addMessage
Adds a chat message to the given thread, posted as the authenticated user. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| threadId   | String     | The thread whose document you want to modify
| frame      | Select     | One of bubble, card, or line
| content    | String     | Plain text content of the new message (ignored if parts is supplied)

## Quip.getSingleFolder
Returns the given folders.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| folderId   | String     | Single folder id

## Quip.getFolders
Return data for each of the given folders in a dictionary by folder ID.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| foldersId  | List       | List of folder id`s

## Quip.createFolder
Creates a folder.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| title      | String     | The name of the folder
| parentId   | String     | If given, we make the folder a child of the given folder. If not given, we create the folder on the authenticated user's Private folder.
| color      | String     | One of the color constants above. Example: manila
| memberIds  | List       | List of folder IDs or user IDs.

## Quip.updateFolder
Updates a folder.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| folderId   | String     | The folder to alter
| title      | String     | The name of the folder
| color      | String     | One of the color constants above. Example: manila

## Quip.addPeopleToFolder
Shares the given folder with the given user IDs.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| folderId   | String     | The folder to which you want to add users.
| memberIds  | List       | List of folder IDs or user IDs.

## Quip.removePeopleFromFolder
Shares the given folder with the given user IDs.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| folderId   | String     | The folder to which you want to add users.
| memberIds  | List       | List of folder IDs or user IDs.

## Quip.getSingleUser
Returns the given users.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| userId     | String     | The user ID.

## Quip.getUsers
Return data for each of the given users in a dictionary.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token
| usersId    | List       | List of user id

## Quip.getAuthenticatedUser
Returns the currently authenticated user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token

## Quip.getContacts
Returns a list of the contacts for the authenticated user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your quip OAuth2 access token

