<?php

    namespace   app\Services;

    abstract class AbstractRepository implements Services\RepositoryINterface
    {

        protected $model;

        public function getAll()
        {
            return $this->mode->all();
        }

        public function find($id)
        {
            return $this->model->find($id);
        }

        public function create(array $data)
        {
            return $this->model->create($data);
        }

        public function update($id, array $data)
        {
            return $this->model->find($id)->update($data);
        }

        public function delete($id)
        {
            return $this->model->find($id)->delete();
        }


    }