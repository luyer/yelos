<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
		
	}
	
	public function search(){
		if ($this->request->is('post')) {
			#debug($this->request->data);
			
			$productos = $this->Producto->find('all', array('conditions'=>array('Producto.nombre like'=>"%".$this->request->data['texto']."%"),
									'recursive'=>-1,
									'limit'=>40));
			#debug($productos);
			#die;
			$this->set('productos', $productos);
		}
		$this->render('search','yelos');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$producto = $this->Producto->find('first', $options);
		#debug($producto);
		$this->set('producto', $producto);
		
		#debug($this->Producto->find('first', $options));
		
		#obtenemos los productos relacionados
		$relacionados = $this->Producto->find('all', array('conditions'=>array('Producto.categoria_id'=>$producto['Producto']['categoria_id']),
								   'recursive'=>-1,
								   'limit'=>4
						   ));
		#debug($relacionados);
		$this->set('relacionados', $relacionados);
		
		$this->render('view','yelos');
	}

/**
 * add method
 *
 * @return void
 */
	//public function add() {
	//	if ($this->request->is('post')) {
	//		$this->Producto->create();
	//		if ($this->Producto->save($this->request->data)) {
	//			$this->Session->setFlash(__('The producto has been saved.'));
	//			return $this->redirect(array('action' => 'index'));
	//		} else {
	//			$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
	//		}
	//	}
	//	$categorias = $this->Producto->Categoria->find('list');
	//	$marcas = $this->Producto->Marca->find('list');
	//	$materiales = $this->Producto->Material->find('list');
	//	$colores = $this->Producto->Color->find('list');
	//	$this->set(compact('categorias', 'marcas', 'materiales', 'colores'));
	//}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	//public function edit($id = null) {
	//	if (!$this->Producto->exists($id)) {
	//		throw new NotFoundException(__('Invalid producto'));
	//	}
	//	if ($this->request->is(array('post', 'put'))) {
	//		if ($this->Producto->save($this->request->data)) {
	//			$this->Session->setFlash(__('The producto has been saved.'));
	//			return $this->redirect(array('action' => 'index'));
	//		} else {
	//			$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
	//		}
	//	} else {
	//		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
	//		$this->request->data = $this->Producto->find('first', $options);
	//	}
	//	$categorias = $this->Producto->Categoria->find('list');
	//	$marcas = $this->Producto->Marca->find('list');
	//	$materiales = $this->Producto->Material->find('list');
	//	$colores = $this->Producto->Color->find('list');
	//	$this->set(compact('categorias', 'marcas', 'materiales', 'colores'));
	//}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	//public function delete($id = null) {
	//	$this->Producto->id = $id;
	//	if (!$this->Producto->exists()) {
	//		throw new NotFoundException(__('Invalid producto'));
	//	}
	//	$this->request->allowMethod('post', 'delete');
	//	if ($this->Producto->delete()) {
	//		$this->Session->setFlash(__('The producto has been deleted.'));
	//	} else {
	//		$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
	//	}
	//	return $this->redirect(array('action' => 'index'));
	//}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
		
		$this->render('admin_index','dashboard');
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Producto->Categoria->find('list');
		$marcas = $this->Producto->Marca->find('list');
		$materiales = $this->Producto->Material->find('list');
		$colores = $this->Producto->Color->find('list');
		$this->set(compact('categorias', 'marcas', 'materiales', 'colores'));
		
		$this->render('admin_add','dashboard');
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$categorias = $this->Producto->Categoria->find('list');
		$marcas = $this->Producto->Marca->find('list');
		$materiales = $this->Producto->Material->find('list');
		$colores = $this->Producto->Color->find('list');
		$this->set(compact('categorias', 'marcas', 'materiales', 'colores'));
		
		$this->render('admin_edit','dashboard');
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('The producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function carga(){
		if($fh = fopen(WWW_ROOT."carga_inicial.csv", "r")){
		
			#recorremos las lineas del archivo
			while ($datos = fgetcsv($fh, 1024,",")) {
			
			$cat_nombre = utf8_encode($datos['0']);
			$material_nombre = utf8_encode($datos[5]);
						       
			if($cat_nombre){
				#debug($cat_nombre);
				#die;
				#buscar si existe la categoria
				$existe_cat = $this->Producto->Categoria->find('first',array('conditions'=>array('Categoria.nombre'=>$cat_nombre),
											     'recursive'=>-1));
				if(!$existe_cat){
					#creamos la categoria
					$cat['Categoria']['id'] = null;
					$cat['Categoria']['nombre'] = $cat_nombre;
					$this->Producto->Categoria->create();
					if ($this->Producto->Categoria->save($cat)) {
						$cat_producto = $this->Producto->Categoria->getLastInsertId();
					}
				}
				else{
					$cat_producto = $existe_cat['Categoria']['id'];
				}
				
				#buscar si existe el material
				$existe_mat = $this->Producto->Material->find('first',array('conditions'=>array('Material.nombre'=>$material_nombre),
											     'recursive'=>-1));
				if(!$existe_mat){
					#creamos el material
					$material['Material']['id'] = null;
					$material['Material']['nombre'] = $material_nombre;
					$this->Producto->Material->create();
					if ($this->Producto->Material->save($material)) {
						$material_producto = $this->Producto->Material->getLastInsertId();
					}
				}
				else{
					$material_producto = $existe_mat['Material']['id'];
				}
				
				#guardamos el producto
				$producto['Producto']['id'] = null;
				$producto['Producto']['categoria_id'] = $cat_producto;
				$producto['Producto']['material_id'] = $material_producto;
				$producto['Producto']['sku'] = $datos[2];
				$producto['Producto']['nombre'] = utf8_encode($datos[3]);
				#$producto['Producto']['descripcion'] = utf8_encode($datos[4]);
				$producto['Producto']['precio'] = 0;
				
				$producto['Producto']['medida'] = utf8_encode($datos[6]);
				$producto['Producto']['tecnica_impresion'] = utf8_encode($datos[7]);
				$producto['Producto']['cantidad_empaque'] = utf8_encode($datos[9]);
				
				$producto['Producto']['foto1'] = $datos[11].".jpg";
				if($datos[12]){
					$producto['Producto']['foto2'] = utf8_encode($datos[12]).".jpg";
				}
				if($datos[13]){
					$producto['Producto']['foto3'] = utf8_encode($datos[13]).".jpg";
				}
				//if($datos[14]){
				//	$producto['Producto']['foto4'] = $datos[14].".jpg";
				//}
				
				$this->Producto->Categoria->create();
				if ($this->Producto->save($producto)) {
					
				}
			}
			
			}
		}		
	}
}
