import * as THREE from "../node_modules/three/build/three.module.js"

window.addEventListener('DOMContentLoaded', () => {
    // Obtiene el lienzo (canvas)
    const canvas = document.getElementById('canvas');
  
    // Configura la escena
    const scene = new THREE.Scene();
  
    // Configura la cámara
    const camera = new THREE.PerspectiveCamera(75, canvas.width / canvas.height, 0.1, 1000);
    camera.position.z = 5;
  
    // Configura el renderizador
    const renderer = new THREE.WebGLRenderer({ canvas });
    renderer.setSize(canvas.width, canvas.height);
  
    // Crea un cubo
    const geometry = new THREE.BoxGeometry(1, 1, 1);
    const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
    const cube = new THREE.Mesh(geometry, material);
  
    // Ajusta la escala del cubo en relación con el tamaño del lienzo
    const canvasAspectRatio = canvas.width / canvas.height;
    const scaleFactor = 2; // Define el factor de escala deseado
    cube.scale.set(canvasAspectRatio * scaleFactor, 1 * scaleFactor, 1 * scaleFactor);
  
    // Agrega el cubo a la escena
    scene.add(cube);
  
    // Renderiza la escena
    function animate() {
      requestAnimationFrame(animate);
      cube.rotation.x += 0.01;
      cube.rotation.y += 0.01;
      renderer.render(scene, camera);
    }
  
    animate();
  });
  