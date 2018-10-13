CREATE DATABASE Go2event_DB;
USE Go2event_DB;

CREATE TABLE categories(

	id_category int unsigned auto_increment,
	name_category varchar(50),
	constraint pk_categories primary key (id_category),
	constraint unq_categories_name unique (name_category)
);

CREATE TABLE events(

	id_event int unsigned auto_increment,
	name_event varchar(50),
	id_category int unsigned,
	constraint pk_events primary key (id_event),
	constraint unq_events_name unique (name_event),
	constraint fk_events_categories foreign key (id_category) references categories (id_category)
);

CREATE TABLE venues(

	id_venue int unsigned auto_increment,
	name_venue varchar(70),
	address varchar(50),
	city varchar(50),
	capacityLimit int unsigned,
	constraint pk_venues primary key (id_venue),
	constraint unq_venue_name unique (name_venue)
);

CREATE TABLE seattypes(

	id_seattype int unsigned auto_increment,
	name_seattype varchar(50),
	description varchar (80),
	constraint pk_seattypes primary key (id_seattype),
	constraint unq_seattypes unique (name_seattype)
);
CREATE TABLE artists(

	id_artist int unsigned auto_increment,
	name_artist varchar(50),
	description varchar (80),
	constraint pk_id_artist primary key (id_artist),
	constraint unq_artists_name unique (name_artist)
);

CREATE TABLE calendars(

	id_calendar int unsigned auto_increment,
	date_calendar datetime,
	id_venue int unsigned,
	id_event int unsigned,
	constraint pk_calendars primary key (id_calendar),
	constraint fk_calendars_venues foreign key (id_venue) references venues (id_venue),
	constraint fk_calendars_events foreign key (id_event) references events (id_event)
);

CREATE TABLE artists_x_calendar(

	id_artist int unsigned,
	id_calendar int unsigned,
	constraint pk_artists_x_calendar primary key (id_artist, id_calendar),
	constraint fk_artists_x_calendar_artists foreign key (id_artist) references artists (id_artist),
	constraint fk_artists_x_calendar_calendar foreign key (id_calendar) references calendars (id_calendar)
);

CREATE TABLE seats(

	id_seat int unsigned auto_increment,
	quant int unsigned,
	price float,
	remaining int unsigned,
	id_calendar int unsigned,
	id_seattype int unsigned,
	constraint pk_seats primary key (id_seat),
	constraint fk_seats_calendars foreign key (id_calendar) references calendars (id_calendar),
	constraint fk_seats_seattypes foreign key (id_seattype) references seattypes (id_seattype)
);