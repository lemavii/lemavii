import * as THREE from 'three';
import {GLTFLoader} from 'three/addons/loaders/GLTFLoader.js'

const canvas = document.querySelector('#webgl');
const renderer = new THREE.WebGLRenderer({canvas:canvas,antialias:true});
renderer.setSize(window.innerWidth,window.innerHeight);
renderer.LinearEncoding = THREE.SRGBToLinear;

const scene = new THREE.Scene();
scene.background = new THREE.Color(0xbfe3dd);

const camera = new THREE.PerspectiveCamera(45,window.innerWidth/window.innerHeight);
camera.position.set(0,1,10);
const loader = new GLTFLoader();
loader.load('assets/scene.gltf', function(gltf){scene.add(gltf.scene);})

function animate(){
    requestAnimationFrame(animate);
    renderer.render(scene,camera);
}
animate();