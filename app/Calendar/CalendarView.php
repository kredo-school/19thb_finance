<?php
namespace App\Calendar;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CalendarView {

	private $carbon;

	public function __construct($date){
		$this->carbon = new Carbon($date);
	}

	protected function getExpenseTotals() {
		$transactions = Transaction::where('transaction_type', 'expense')
			->where('user_id', Auth::user()->id)
			->whereBetween('datetime', [
				$this->carbon->copy()->startOfMonth(),
				$this->carbon->copy()->endOfMonth()
			])->get();
	
		$expenseTotals = [];
	
		foreach ($transactions as $transaction) {
			$dateKey = Carbon::parse($transaction->datetime)->format('Y-m-d');
	
			if (!isset($expenseTotals[$dateKey])) {
				$expenseTotals[$dateKey] = 0;
			}
	
			$expenseTotals[$dateKey] += $transaction->amount;
		}
	
		return $expenseTotals;
	}	

	protected function getIncomeTotals() {
        $transactions = Transaction::where('transaction_type', 'income')
			->where('user_id', Auth::user()->id)
            ->whereBetween('datetime', [
                $this->carbon->copy()->startOfMonth(),
                $this->carbon->copy()->endOfMonth()
            ])->get();

        $incomeTotals = [];

        foreach ($transactions as $transaction) {
            $dateKey = Carbon::parse($transaction->datetime)->format('Y-m-d');

            if (!isset($incomeTotals[$dateKey])) {
                $incomeTotals[$dateKey] = 0;
            }

            $incomeTotals[$dateKey] += $transaction->amount;
        }

        return $incomeTotals;
    }

	/**
	 * タイトル
	 */
	public function getTitle(){
		return $this->carbon->format('Y.n');
	}

	/**
	 * カレンダーを出力する
	 */
	function render(){
		$html = [];
		$html[] = '<div class="calendar">';
		$html[] = '<table class="table">';
		$html[] = '<thead>';
		$html[] = '<tr>';
		$html[] = '<th>Mon</th>';
		$html[] = '<th>Tue</th>';
		$html[] = '<th>Wed</th>';
		$html[] = '<th>Thu</th>';
		$html[] = '<th>Fri</th>';
		$html[] = '<th>Sat</th>';
        $html[] = '<th>Sun</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';

        $html[] = '<tbody>';

        $weeks = $this->getWeeks();
        foreach($weeks as $week){
            $html[] = '<tr class="'.$week->getClassName().'" style="height: 70px;">';
            $days = $week->getDays();
            foreach($days as $day){

				$expenseTotals = $this->getExpenseTotals();
				$incomeTotals = $this->getIncomeTotals();

				if ($day instanceof CalendarWeekBlankDay) {
					// $day がブランクの場合の処理
					$html[] = '<td class="'.$day->getClassName().'" style="width: 70px">';
					$html[] = $day->render();
					$html[] = '</td>';
				} else {
					// $day が通常の日付の場合の処理
					$dateKey = $day->getDate()->format('Y-m-d');
					$totalExpense = isset($expenseTotals[$dateKey]) ? $expenseTotals[$dateKey] : 0;
					$totalIncome = isset($incomeTotals[$dateKey]) ? $incomeTotals[$dateKey] : 0;
					$totalBalance = $totalIncome-$totalExpense;

					$html[] = '<td class="px-1 pb-0 '.$day->getClassName().'" style="width: 70px">';
					$html[] = $day->render();
					if ($totalBalance != 0) {
						$color = $totalBalance > 0 ? 'color1' : 'color2';
						$html[] = '<div class="px-0 py-3 ' . $color . '">' . number_format(floor($totalBalance)) . '</div>';
					}
					$html[] = '</td>';
				}
			}
			$html[] = '</tr>';
        }

        $html[] = '</tbody>';

		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
	}

    protected function getWeeks(){
		$weeks = [];

		//初日
		$firstDay = $this->carbon->copy()->firstOfMonth();

		//月末まで
		$lastDay = $this->carbon->copy()->lastOfMonth();

		//1週目
		$week = new CalendarWeek($firstDay->copy());
		$weeks[] = $week;

		//作業用の日
		$tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();

		//月末までループさせる
		while($tmpDay->lte($lastDay)){
			//週カレンダーViewを作成する
			$week = new CalendarWeek($tmpDay, count($weeks));
			$weeks[] = $week;
			
            //次の週=+7日する
			$tmpDay->addDay(7);
		}

		return $weeks;
	}

	public function getNextMonth(){
		return $this->carbon->copy()->addMonthsNoOverflow()->format('Y-m');
	}

	public function getPreviousMonth(){
		return $this->carbon->copy()->subMonthsNoOverflow()->format('Y-m');
	}
}