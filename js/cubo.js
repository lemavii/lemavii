import * as THREE from "../node_modules/three/build/three.module.js"
import {GLTFLoader} from '../node_modules/three/examples/jsm/loaders/GLTFLoader.js'

const canvas = document.querySelector('.canvas');
const scene = new THREE.Scene();

const loader = new GLTFLoader();
loader.load('assets/scene.gltf',function(gltf){
    console.log(gltf)
}, function(xhr){
    console.log((xhr.loaded/xhr.total*100)+"%loaded")
}, function(error){
    console.log('errordecarga')
});


const geometry = new THREE.BoxGeometry(1,1,1);
const material = new THREE.MeshBasicMaterial({color:0x00ff00});
const boxMesh= new THREE.Mesh(geometry,material);
scene.add(boxMesh);

const sizes={
    width:window.innerWidth,
    height:window.innerHeight
};

const camera = new THREE.PerspectiveCamera(75, sizes.width/sizes.height,0.1,100);
camera.position.set(0,1,2);
scene.add(camera);

const renderer = new THREE.WebGLRenderer({
    canvas:canvas
});

renderer.setSize(sizes.width,sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio,2));
renderer.shadowMap.enabled = true;
renderer.gammaOutput = true;
renderer.render(scene,camera);

