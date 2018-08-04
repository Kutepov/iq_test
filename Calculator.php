<?php 

class Calculator {
	const MONTH_IN_YEAR = 12;
	const DAYS_IN_YEAR = 365; 
	const CURRENCY_RUB = ' руб.';
	protected $date;
	protected $sumContribution;
	protected $duration;
	protected $sumAddContribution;
	protected $percent;

	public function __construct($date, $sumContribution, $duration, $sumAddContribution = null, $percent = 0.1) {
		$this->date = (string) $date;
		$this->sumContribution = (int) $sumContribution;
		$this->duration = (int) $duration;
		$this->sumAddContribution = (int) $sumAddContribution;
		$this->percent = $percent;
		
		if (!$this->sumAddContribution)
			$this->sumAddContribution = 0;
	}

	private function monthDuration() {
		return $this->duration*self::MONTH_IN_YEAR;
	}

	public function calculateContribution() {

		$sumMonth = $this->monthDuration();

		for ($i=0; $i < $sumMonth; $i++) {
			$dateArr = explode('-', $this->date);
			$month = $dateArr[1];
			$year = $dateArr[0];

			$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

			$date = date_create($this->date);
			date_modify($date, '1 month');
			$this->date = date_format($date, 'Y-m-d');

			if ($i > 0)
				$addContribution = $this->sumAddContribution;

			$this->sumContribution += $addContribution + ($this->sumContribution*$daysInMonth*($this->percent/self::DAYS_IN_YEAR));
		}
		return number_format($this->sumContribution, 0, '', ' ').self::CURRENCY_RUB;
	}

}

?>