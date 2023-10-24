
import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';

var canvas = document.getElementById("myCanvass");
var canvasWidth = document.getElementById("myCanvass").clientWidth;
var canvasHeight = document.getElementById("myCanvass").clientHeight;

var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(45, canvasWidth / canvasHeight, 0.25, 20);
camera.position.set( 0, 0.2, 2.7 );
var renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    antialias: true
});

renderer.setSize(canvasWidth, canvasHeight);
renderer.setClearColor("#000000", 0.0);


var loader = new GLTFLoader().setPath( 'models/gltf/DamagedHelmet/glTF/' );

var model;

loader.load('DamagedHelmet.gltf', function (gltf) {
    model = gltf.scene;
    model.position.set(0, 0, 0);

    scene.add(model);
});

var light = new THREE.PointLight(0xffffff, 1, 100);
light.position.set(5, 5, 5);
scene.add(light);
scene.add(light);

camera.position.z = 5;

function pointerToVector(event) {
    var x = (event.clientX / window.innerWidth) * 2 - 1;
    var y = -(event.clientY / window.innerHeight) * 2 + 1;
    var vector = new THREE.Vector3(x, y, 0.5);
    vector.unproject(camera);
    return vector;
}

function updateRotation(event) {
    if (model) {
        var pointerVector = pointerToVector(event);

        // Invertir la rotación del modelo según la posición del puntero
        model.rotation.y = pointerVector.x;
        model.rotation.x = -pointerVector.y;
    }
}

document.addEventListener('mousemove', updateRotation, false);

function render() {
    requestAnimationFrame(render);
    renderer.render(scene, camera);
}

render();