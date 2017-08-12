use project177;

delimiter #
create procedure load_data1()
begin

declare v_max int unsigned default 4705;
declare v_counter int unsigned default ;
while v_counter < v_max do
	insert into movies (movie_desc_id, people_id, movie_reviews_id) values (v_counter, v_counter, v_counter);
    set v_counter = v_counter + 1;
end while;
commit;
end #

delimiter ;

call load_data1();

drop procedure load_data1;