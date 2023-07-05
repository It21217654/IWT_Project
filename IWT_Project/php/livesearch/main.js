function search(name) {
	console.log(name);
	fetchSearchData(name);
}

function fetchSearchData(name) {
	fetch('search.php', {
		method: 'POST',
		body: new URLSearchParams('name=' + name)
	})
	.then(res => res.json())
	.then(res => viewSearchResult(res))
	.catch(e => console.error('Error: ' + e))
}

function viewSearchResult(data) {
	const dataViewer = document.getElementById("dataViewer");
	
	dataViewer.innerHTML = "";
	
	for(let i = 0; i < data.length; i++) {
		const li = document.createElement("li");
		//const a = document.createElement("a");
		li.innerHTML = data[i]["pName"] + "<a href='../payment.php' class = 'button'?>Book Now</a>"; 
		//a.innerHTML = data[i]+'Book Now';
		//li.innerHTML = data[i]["id"];
		dataViewer.appendChild(li);
	}
}


document.getElementById('closeButton').addEventListener('click', function() {
	history.back();
});