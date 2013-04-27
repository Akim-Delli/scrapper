// Called when the user clicks on the browser action.
chrome.browserAction.onClicked.addListener(function(tab) {
  // No tabs or host permissions needed!
  //console.log('Turning ' + tab.url + ' red!');
  chrome.tabs.executeScript(null, { file: "scripts/jquery-2.0.0.min.js" }, function() {
    chrome.tabs.executeScript(null, { file:  'scripts/parse.js' });
    });
  //alert('Turning ' + tab.url + ' red!');
});