<?php

namespace Persona\Hris\Allocation\Model;

use Persona\Hris\Employee\Model\EmployeeInterface;
use Persona\Hris\Organization\Model\CompanyInterface;
use Persona\Hris\Organization\Model\DepartmentInterface;
use Persona\Hris\Organization\Model\JobClassInterface;
use Persona\Hris\Organization\Model\JobTitleInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@personahris.com>
 */
interface MutationInterface
{
    const TYPE_MUTATION = 'm';
    const TYPE_PROMOTION = 'p';
    const TYPE_DEMOTION = 'd';

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getMutationType(): string;

    /**
     * @return null|EmployeeInterface
     */
    public function getEmployee(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null): void;

    /**
     * @return null|JobTitleInterface
     */
    public function getOldJobTitle(): ? JobTitleInterface;

    /**
     * @param JobTitleInterface $jobTitle
     */
    public function setOldJobTitle(JobTitleInterface $jobTitle = null): void;

    /**
     * @return null|JobTitleInterface
     */
    public function getNewJobTitle(): ? JobTitleInterface;

    /**
     * @param JobTitleInterface $jobTitle
     */
    public function setNewJobTitle(JobTitleInterface $jobTitle = null): void;

    /**
     * @return null|JobClassInterface
     */
    public function getOldJobClass(): ? JobClassInterface;

    /**
     * @param JobClassInterface $jobClass
     */
    public function setOldJobClass(JobClassInterface $jobClass = null): void;

    /**
     * @return null|JobClassInterface
     */
    public function getNewJobClass(): ? JobClassInterface;

    /**
     * @param JobClassInterface $jobClass
     */
    public function setNewJobClass(JobClassInterface $jobClass = null): void;

    /**
     * @return null|CompanyInterface
     */
    public function getOldCompany(): ? CompanyInterface;

    /**
     * @param CompanyInterface $company
     */
    public function setOldCompany(CompanyInterface $company = null): void;

    /**
     * @return null|CompanyInterface
     */
    public function getNewCompany(): ? CompanyInterface;

    /**
     * @param CompanyInterface $company
     */
    public function setNewCompany(CompanyInterface $company = null): void;

    /**
     * @return null|DepartmentInterface
     */
    public function getOldDepartment(): ? DepartmentInterface;

    /**
     * @param DepartmentInterface $department
     */
    public function setOldDepartment(DepartmentInterface $department = null): void;

    /**
     * @return null|DepartmentInterface
     */
    public function getNewDepartment(): ? DepartmentInterface;

    /**
     * @param DepartmentInterface $department
     */
    public function setNewDepartment(DepartmentInterface $department = null): void;

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime;

    /**
     * @return string
     */
    public function getLetterNumber(): string;
}
