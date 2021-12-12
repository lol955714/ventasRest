<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductoRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductoController extends AbstractController
{
    private $productoRepository;
    public function __construct(ProductoRepository $repo){
        $this->productoRepository=$repo;
    }

    /**
     * @Route("producto/get", name="producto_get", methods={"GET"})
     */
    public function producto_get(Request $request, SerializerInterface $serializer): JsonResponse
    {
        $content=json_decode($request->getContent(), true);
        $dato=$this->productoRepository->findOneBy(['id' => $content['id']]);
        if (empty($dato)){
            throw new NotFoundHttpException("Error id no existente");
        }
        $producto=$serializer->serialize($dato, 'json');
        return new JsonResponse($producto, Response::HTTP_OK);
    }
    /**
     * @Route("producto/list", name="producto_list", methods={"GET"})
     */
    public function producto_list(SerializerInterface $serializer): JsonResponse
    {
        $data=$serializer->serialize($this->productoRepository->findAll(),'json');
        return new JsonResponse($data, Response::HTTP_OK);
    }
     /**
     * @Route("producto/save", name="producto_save", methods={"POST"})
     */
    public function producto_save(Request $request): JsonResponse
    {
        $data = Json_decode($request->getContent(),true);
        $nombre=$data['nombre'];
        $categoria=$data['categoria'];
        $cantidad=$data['cantidad'];
        $precio_venta=$data['precio_venta'];
        $precio_compra=$data['precio_compra'];
        $this->productoRepository->save($nombre, $categoria, $cantidad, $precio_compra, $precio_venta);
        return new JsonResponse(['status'=>'Producto guardado'], Response::HTTP_OK);
    }
}
