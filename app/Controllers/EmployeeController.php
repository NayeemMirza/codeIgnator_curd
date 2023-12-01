<?php namespace App\Controllers;
use App\Models\Employee;
    class EmployeeController extends BaseController {
        public function index(){ 
            $employees = new Employee(); 
            $data['employees'] = $employees->findAll();
            return view('employee/index', $data); 
        }

        public function create(){
            return view('employee/create');
        }
        public function store(){
            $employees = new Employee();
            $data = [
                'frist_name'=> $this->request->getPost('frist_name'),
                'last_name'=> $this->request->getPost('last_name'),
                'email'=> $this->request->getPost('email'),
                'phone'=> $this->request->getPost('phone'),
                'designation'=> $this->request->getPost('designation') 
            ];
            $employees->save($data);
            return redirect()->to(base_url('employee'))->with('success','Employee Added Successfully');
        }

        public function edit($id){
            $employees = new Employee(); 
            $data['employees'] = $employees->find($id);
            return view('employee/edit', $data);
        }

        public function update($id){
            $employees = new Employee(); 
            $employees->find($id);
            $data = [
                'frist_name'=> $this->request->getPost('frist_name'),
                'last_name'=> $this->request->getPost('last_name'),
                'email'=> $this->request->getPost('email'),
                'phone'=> $this->request->getPost('phone'),
                'designation'=> $this->request->getPost('designation') 
            ];
            $employees->update($id, $data);
            return redirect()->to(base_url('employee'))->with('success','Employee Updated Successfully');
        }
        public function delete($id){
            $employees = new Employee(); 
            $employees->delete($id);
            return redirect()->to(base_url('employee'))->with('success','Employee Deleted Successfully');
        }
    }
?>