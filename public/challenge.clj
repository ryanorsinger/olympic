
(defn getmostFrequentReverse [sequence]
	(seq
		(reverse 
			(sort sequence))))



(defn sorty [sequence]
	(apply str (getmostFrequentReverse sequence)))