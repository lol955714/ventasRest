<?php

namespace App\Controller;

use App\Repository\CategoriaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Serializer\SerializerInterface;

class CategoriaController extends AbstractController
{   
    private $categoriaRepository;
    
    public function __construct(CategoriaRepository $repo)
    {
        $this->categoriaRepository=$repo;
    }

    /**
     * @route("categoria/save", name="add_categoria", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = Json_decode($request->getContent(),true);
        $nombre =$data['nombre'];
        if (empty($nombre)){
            throw new NotFoundHttpException("Error Processing Request");
        }
        $this->categoriaRepository->saveCategory($nombre);
        return new JsonResponse(['status'=> 'categoria creada'], Response::HTTP_CREATED);
    }
    /**
     * @Route("categoria/list", name="list_categoria",methods={"GET"})
     */
    public function listCategorias(SerializerInterface $serializer): JsonResponse
    {   
        $data=$serializer->serialize($this->categoriaRepository->findAll(),'json');
        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("categoria/get", name="get_categoria", methods={"GET"})
     */
    public function getCategoria(Request $request, SerializerInterface $serializer): JsonResponse
    {
        $content=json_decode($request->getContent(),true);
        $dato=$this->categoriaRepository->findOneBy(['id' => $content['id']]);
        if (empty($dato)){
            throw new NotFoundHttpException("Error id no existente");
        }
        $categoria=$serializer->serialize($dato,'json');
        return new JsonResponse($categoria, Response::HTTP_OK);
    }
    /**
     * @Route("categoria/update", name="update_categoria", methods={"PUT"})
     */
    public function update_categoria(Request $request): JsonResponse
    {
        $content=json_decode($request->getContent(),true);
        $id=$content['id'];
        $categoria=$this->categoriaRepository->findOneBy(['id' => $id]);
        empty($content['nombre'])?true : $categoria->setNombre($content['nombre']);
        $this->categoriaRepository->update($categoria);
        return new JsonResponse(['status'=>'Categoria Actualizada'],Response::HTTP_OK);
    }
    /**
     * @Route("categoria/delete", name="delete_categoria", methods={"DELETE"})
     */
    public function delete_categoria(Request $request): JsonResponse
    {
        
        $content=json_decode($request->getContent(),true);
        $id=$content['id'];
        $categoria=$this->categoriaRepository->findOneBy(['id' => $id]);
        $this->categoriaRepository->delete($categoria);
        return new JsonResponse(['status' => 'Categoria eliminada'], Response::HTTP_OK);
    }
}