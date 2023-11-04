//function modificar este
import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';
var scene, camera, renderer, cube, controls;
var canvas = document.getElementById("myCanvasis");
var canvasWidth = document.getElementById("myCanvasis").clientWidth;
var canvasHeight = document.getElementById("myCanvasis").clientHeight;
var canvasWidth =600;
var canvasHeight = 300;
console.log(canvasWidth);
console.log(canvasHeight);

// call init function
init();
// call animate 
animate();

function init() {
    //create empty scene
    scene = new THREE.Scene();

    //create renderer 
    renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true
    });
    
    renderer.setSize(canvasWidth, canvasHeight);
    renderer.setClearColor("#000000", 0.0);

    // create camera
    camera = new THREE.PerspectiveCamera(45, canvasWidth / canvasHeight, 0.25, 20);
    camera.position.set( - 1.8, 0.6, 2.7 );

    // for use viewport control this help us to control object by mouse
    controls = new OrbitControls(camera, renderer.domElement);
    
    controls.autoRotateSpeed = 2.0;
    controls.enableZoom = true;
    //LIGHTS
    var light = new THREE.PointLight(0xffffff, 1, 100);
    light.position.set(5, 5, 5);
    scene.add(light);
    scene.add(light);

    var light2 = new THREE.PointLight(0xff0000, 0.8);
    scene.add(light2);


    // load 3d model from our dir
    /*var loader = new GLTFLoader().setPath( 'models/gltf/DamagedHelmet/glTF/' );

    loader.load('DamagedHelmet.gltf', handle_load);*/
    var loader = new GLTFLoader().setPath( 'models/gltf/Perfilador/' );

    loader.load('perfiladormini.gltf', handle_load);
    var mesh;
    function handle_load(gltf) {
        mesh = gltf.scene;

        scene.add(mesh);
    }

    renderer.render(scene, camera);

}

// animate fucntion update per seconds
function animate() {

    // call controls 
    controls.update();

    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}