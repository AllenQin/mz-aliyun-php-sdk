<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace imm\Request\V20170906;

use Aliyun\Core\RpcAcsRequest;

class UpdateProjectRequest extends RpcAcsRequest
{
    private $newCU;
    private $engines;
    private $newServiceRole;
    private $project;

    function __construct()
    {
        parent::__construct("imm", "2017-09-06", "UpdateProject", "imm", "openAPI");
        $this->setMethod("POST");
    }

    public function getNewCU()
    {
        return $this->newCU;
    }

    public function setNewCU($cU)
    {
        $this->newCU = $cU;
        $this->queryParameters["NewCU"] = $cU;
    }

    public function getEngines()
    {
        return $this->engines;
    }

    public function setEngines($engines)
    {
        $this->engines = $engines;
        $this->queryParameters["Engines"] = $engines;
    }

    public function getServiceRole()
    {
        return $this->newServiceRole;
    }

    public function setServiceRole($serviceRole)
    {
        $this->newServiceRole = $serviceRole;
        $this->queryParameters["NewServiceRole"] = $serviceRole;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
        $this->queryParameters["Project"] = $project;
    }
}