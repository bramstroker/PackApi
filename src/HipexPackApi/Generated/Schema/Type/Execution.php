<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Execution
 * @codeCoverageIgnore
 */
class Execution extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * started
	 *
	 * @var DateTimeInterface|null
	 */
	private $started;

	/**
	 * finished
	 *
	 * @var DateTimeInterface|null
	 */
	private $finished;

	/**
	 * steps
	 *
	 * @var Execution_step[]|null
	 */
	private $steps;


	/**
	 * started
	 *
	 * @return DateTimeInterface|null
	 */
	public function getStarted()
	{
		return $this->started;
	}


	/**
	 * started
	 *
	 * @param DateTimeInterface|null $started
	 * @return $this
	 */
	public function setStarted($started = null): self
	{
		if ($started !== null && !$started instanceof DateTimeInterface) {
		    $started = new \DateTimeImmutable($started);
		}
		$this->started = $started;
		return $this;
	}


	/**
	 * finished
	 *
	 * @return DateTimeInterface|null
	 */
	public function getFinished()
	{
		return $this->finished;
	}


	/**
	 * finished
	 *
	 * @param DateTimeInterface|null $finished
	 * @return $this
	 */
	public function setFinished($finished = null): self
	{
		if ($finished !== null && !$finished instanceof DateTimeInterface) {
		    $finished = new \DateTimeImmutable($finished);
		}
		$this->finished = $finished;
		return $this;
	}


	/**
	 * steps
	 *
	 * @return Execution_step[]|null
	 */
	public function getSteps()
	{
		return $this->steps;
	}


	/**
	 * steps
	 *
	 * @param Execution_step[]|null $steps
	 * @return $this
	 */
	public function setSteps($steps = null): self
	{
		$this->steps = [];
		if ($steps === null) return $this;
		foreach ($steps as $item) {
		    $this->addStepsValue($item);
		}
		return $this;
	}


	private function addStepsValue($steps)
	{
		if ($steps !== null && !$steps instanceof \HipexPackApi\Generated\Schema\Type\Execution_step) {
		    $steps = new \HipexPackApi\Generated\Schema\Type\Execution_step($steps);
		}
		$this->steps[] = $steps;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'started' => $this->started,
		    'finished' => $this->finished,
		    'steps' => $this->steps,
		];
	}
}
