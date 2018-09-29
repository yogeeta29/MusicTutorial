function init() {
	
	if (BABYLON.Engine.isSupported()) {

	var engine = new BABYLON.Engine(document.getElementById('scene3d'), true);
	
	var scene  = new BABYLON.Scene(engine);
	var camera = new BABYLON.FreeCamera("Camera", new BABYLON.Vector3(5,0,-10), scene);
	var light0 = new BABYLON.PointLight("Onmi0",  new BABYLON.Vector3(60,-210,-560), scene);
		
	var notes = [
		
		{ src:"61.mp3", id:"1", key: 83,  obj:BABYLON.Mesh.CreateBox( "1", 1, scene), color: "b" },
		{ src:"63.mp3", id:"2", key: 68,  obj:BABYLON.Mesh.CreateBox( "2", 1, scene), color: "b" },
		{ src:"66.mp3", id:"3", key: 71,  obj:BABYLON.Mesh.CreateBox( "3", 1, scene), color: "b" },
		{ src:"68.mp3", id:"4", key: 72,  obj:BABYLON.Mesh.CreateBox( "4", 1, scene), color: "b" },
		{ src:"70.mp3", id:"5", key: 74,  obj:BABYLON.Mesh.CreateBox( "5", 1, scene), color: "b" },

		{ src:"73.mp3", id:"6", key: 50,  obj:BABYLON.Mesh.CreateBox( "6", 1, scene), color: "b" },
		{ src:"75.mp3", id:"7", key: 51,  obj:BABYLON.Mesh.CreateBox( "7", 1, scene), color: "b" },
		{ src:"78.mp3", id:"8", key: 53,  obj:BABYLON.Mesh.CreateBox( "8", 1, scene), color: "b" },
		{ src:"80.mp3", id:"9", key: 54,  obj:BABYLON.Mesh.CreateBox( "9", 1, scene), color: "b" },
		{ src:"82.mp3", id:"10", key: 55,  obj:BABYLON.Mesh.CreateBox( "10", 1, scene), color: "b" },
		
		{ src:"85.mp3", id:"11", key: 57,  obj:BABYLON.Mesh.CreateBox( "11", 1, scene), color: "b" },

		{ src:"60.mp3", id:"12", key: 90,  obj:BABYLON.Mesh.CreateBox( "12", 1, scene), color: "w" },
		{ src:"62.mp3", id:"13", key: 88,  obj:BABYLON.Mesh.CreateBox( "13", 1, scene), color: "w" },
		{ src:"64.mp3", id:"14", key: 67,  obj:BABYLON.Mesh.CreateBox( "14", 1, scene), color: "w" },
		{ src:"65.mp3", id:"15", key: 86,  obj:BABYLON.Mesh.CreateBox( "15", 1, scene), color: "w" },
		{ src:"67.mp3", id:"16", key: 66,  obj:BABYLON.Mesh.CreateBox( "16", 1, scene), color: "w" },
		{ src:"69.mp3", id:"17", key: 78,  obj:BABYLON.Mesh.CreateBox( "17", 1, scene), color: "w" },
		{ src:"71.mp3", id:"18", key: 77,  obj:BABYLON.Mesh.CreateBox( "18", 1, scene), color: "w" },
		
		{ src:"72.mp3", id:"19", key: 81,  obj:BABYLON.Mesh.CreateBox( "19", 1, scene), color: "w" },
		{ src:"74.mp3", id:"20", key: 87,  obj:BABYLON.Mesh.CreateBox( "20", 1, scene), color: "w" },
		{ src:"76.mp3", id:"21", key: 69,  obj:BABYLON.Mesh.CreateBox( "21", 1, scene), color: "w" },
		{ src:"77.mp3", id:"22", key: 82,  obj:BABYLON.Mesh.CreateBox( "22", 1, scene), color: "w" },
		{ src:"79.mp3", id:"23", key: 84,  obj:BABYLON.Mesh.CreateBox( "23", 1, scene), color: "w" },
		{ src:"81.mp3", id:"24", key: 89,  obj:BABYLON.Mesh.CreateBox( "24", 1, scene), color: "w" },
		{ src:"83.mp3", id:"25", key: 85,  obj:BABYLON.Mesh.CreateBox( "25", 1, scene), color: "w" },
		{ src:"84.mp3", id:"26", key: 73,  obj:BABYLON.Mesh.CreateBox( "26", 1, scene), color: "w" },
		
		{ src:"86.mp3", id:"27", key: 79,  obj:BABYLON.Mesh.CreateBox( "27", 1, scene), color: "w" },
	];
	
	
	
	
	var wk_pos = -3.5, bk_pos = -3,
	step = 1.2, step_w = step;
	
	var T = 2, C = 0;
	
	
	var material = new BABYLON.StandardMaterial("blackmaterial", scene);
	material.diffuseColor = new BABYLON.Color3(0, 0, 0); //assigns black color to upper keys
	
	for (k in notes) {
		// if it is a white button
		if(notes[k].color == "w") {
			notes[k].obj.position = new BABYLON.Vector3(wk_pos++*step, 0, 0); //(position of the keys(horizontal),position(vertical),width of keys)
			notes[k].obj.scaling.y = 4; // length of the white keys
		// if instead it is a black button
		} else {

			if(T == 3){
				if(C <= T){
					if(C == 3){
						T = 2;
						C = 0;
						bk_pos++;
					}
				}
			}else if(T == 2){
				if(C <= T){
					if(C == 2){
						T = 3;
						C = 0;
						bk_pos++;
					}
				}
			}
			
			C++;
			
			notes[k].obj.position = new BABYLON.Vector3(bk_pos++*step_w, 1, -0.2); //(position of the keys(horizontal),position(vertical),width of keys)
			notes[k].obj.scaling.y = 3; // length of the white keys(vertical)
			notes[k].obj.material = material;
		}
	}
	
	console.log(light0);
	engine.runRenderLoop( function() { scene.render(); });

	// registrare molti suoni
	createjs.Sound.registerManifest(notes, "audio-assets/");
	
	createjs.Sound.addEventListener("fileload", function (event) {
	
		createjs.Sound.defaultInterruptBehavior = createjs.Sound.INTERRUPT_ANY;
	
		// elaborazione degli eventi della tastiera
		window.onkeydown = function(event) {
		    
			var keydown = event.which;
			console.log(keydown);
			for (n in notes) {					
				if (notes[n].key == keydown) 
				{
					createjs.Sound.play(notes[n].id);
					
					notes[n].obj.position.z = (notes[n].color=="w")?.2:-0.1;
					return;
				}				
			}
			
			return false;
		};
		
		// elaborazione degli eventi della tastiera
		window.onkeyup = function(event) {
		    
			var keyup = event.which;
			for (n in notes) {					
				if (notes[n].key == keyup) 
				{
					notes[n].obj.position.z = (notes[n].color=="w")?0:-0.2;
					break;
				}				
			}
			return;
		};
		
		
		window.addEventListener("click", function (evt) {
		
			
			// Proviamo a intercettare un oggetto
			var pickResult = scene.pick(evt.clientX, evt.clientY);
			
			var noteID = pickResult.pickedMesh.id;
			console.log(noteID);
			
			for(n in notes){
				if (notes[n].id == noteID) 
				{
					createjs.Sound.play(notes[n].id);
					
					notes[n].obj.position.z = (notes[n].color=="w")?.2:-0.1;
					window.setTimeout(function() {
						notes[n].obj.position.z = (notes[n].color=="w")?0:-0.2;
					}, 100);
					return;
				}
			}
		});
		
	});
	
	}else{
		window.alert("Beowser non supportato");
	}
}