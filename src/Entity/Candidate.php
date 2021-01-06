<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
class Candidate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Skill;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_of_entry;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Candidate_Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Mobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Total_Exp;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Calculate_Total_Exp;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Relevant_Exp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Current_Company;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Current_CTC;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Expected_CTC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Current_Location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Expected_Location;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Notice_Period;

    /**
     * @ORM\Column(type="date")
     */
    private $Career_Join_Date;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $reminder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkill(): ?string
    {
        return $this->Skill;
    }

    public function setSkill(string $Skill): self
    {
        $this->Skill = $Skill;

        return $this;
    }

    public function getDateOfEntry(): ?\DateTimeInterface
    {
        return $this->Date_of_entry;
    }

    public function setDateOfEntry(?\DateTimeInterface $Date_of_entry): self
    {
        $this->Date_of_entry = $Date_of_entry;

        return $this;
    }

    public function getCandidateName(): ?string
    {
        return $this->Candidate_Name;
    }

    public function setCandidateName(string $Candidate_Name): self
    {
        $this->Candidate_Name = $Candidate_Name;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->Mobile;
    }

    public function setMobile(?string $Mobile): self
    {
        $this->Mobile = $Mobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTotalExp(): ?string
    {
        return $this->Total_Exp;
    }

    public function setTotalExp(string $Total_Exp): self
    {
        $this->Total_Exp = $Total_Exp;

        return $this;
    }

    public function getCalculateTotalExp(): ?string
    {
        return $this->Calculate_Total_Exp;
    }

    public function setCalculateTotalExp(string $Calculate_Total_Exp): self
    {
        $this->Calculate_Total_Exp = $Calculate_Total_Exp;

        return $this;
    }

    public function getRelevantExp(): ?string
    {
        return $this->Relevant_Exp;
    }

    public function setRelevantExp(string $Relevant_Exp): self
    {
        $this->Relevant_Exp = $Relevant_Exp;

        return $this;
    }

    public function getCurrentCompany(): ?string
    {
        return $this->Current_Company;
    }

    public function setCurrentCompany(string $Current_Company): self
    {
        $this->Current_Company = $Current_Company;

        return $this;
    }

    public function getCurrentCTC(): ?string
    {
        return $this->Current_CTC;
    }

    public function setCurrentCTC(string $Current_CTC): self
    {
        $this->Current_CTC = $Current_CTC;

        return $this;
    }

    public function getExpectedCTC(): ?string
    {
        return $this->Expected_CTC;
    }

    public function setExpectedCTC(string $Expected_CTC): self
    {
        $this->Expected_CTC = $Expected_CTC;

        return $this;
    }

    public function getCurrentLocation(): ?string
    {
        return $this->Current_Location;
    }

    public function setCurrentLocation(string $Current_Location): self
    {
        $this->Current_Location = $Current_Location;

        return $this;
    }

    public function getExpectedLocation(): ?string
    {
        return $this->Expected_Location;
    }

    public function setExpectedLocation(string $Expected_Location): self
    {
        $this->Expected_Location = $Expected_Location;

        return $this;
    }

    public function getNoticePeriod(): ?string
    {
        return $this->Notice_Period;
    }

    public function setNoticePeriod(string $Notice_Period): self
    {
        $this->Notice_Period = $Notice_Period;

        return $this;
    }

    public function getCareerJoinDate(): ?\DateTimeInterface
    {
        return $this->Career_Join_Date;
    }

    public function setCareerJoinDate(\DateTimeInterface $Career_Join_Date): self
    {
        $this->Career_Join_Date = $Career_Join_Date;

        return $this;
    }

    public function getReminder(): ?string
    {
        return $this->reminder;
    }

    public function setReminder(?string $reminder): self
    {
        $this->reminder = $reminder;

        return $this;
    }
}
